@echo off
setlocal

:: === CONFIGURAÇÕES ===
set "REPO_URL=https://github.com/luansilvafatec/projetogti.git"
set "PASTA_PROJETO=projetogti"
set "XAMPP_PATH=C:\xampp"
set "GIT_USER_NAME=luansilvafatec"
set "GIT_USER_EMAIL=luan.silva99@fatec.sp.gov.br"

echo.
echo ==== Iniciando Apache e MySQL com XAMPP ====
if "%XAMPP_PATH%"=="" (
    echo ERRO: PASTA DO XAMPP não está definido!
    pause
    exit /b
)

:: Inicia Apache e MySQL como serviços em segundo plano
"%XAMPP_PATH%\xampp_stop.exe"
"%XAMPP_PATH%\xampp_start.exe"

echo Servidores iniciados (em background).
pause

:: === CLONE OU UPDATE DO PROJETO ===
if "%PASTA_PROJETO%"=="" (
    echo ERRO: PASTA DO PROJETO não está definido!
    pause
    exit /b
)
if "%REPO_URL%"=="" (
    echo ERRO: REPO_URL não está definido!
    pause
    exit /b
)
echo.
echo ==== Verificando o projeto ====
if not exist "%PASTA_PROJETO%\" (
    echo Projeto não encontrado. Clonando...
    git clone %REPO_URL% %PASTA_PROJETO%
    if errorlevel 1 (
        echo Erro ao clonar repositório.
        pause
        exit /b
    )
) else (
    echo Projeto já existe. Atualizando com git pull...
    cd %PASTA_PROJETO%
    git pull
    cd ..
)

:: === ENTRA NA PASTA DO PROJETO ===
cd %PASTA_PROJETO%

:: === COMPOSER INSTALL ===
echo.
echo ==== Instalando dependências PHP (composer install) ====
start /wait cmd /c "composer install --no-interaction"
if errorlevel 1 (
    echo Erro no composer install!
    pause
    exit /b
)
pause

:: === NPM INSTALL ===
echo.
echo ==== Instalando dependências Node.js (npm install) ====
start /wait cmd /c "npm install"
if errorlevel 1 (
    echo Erro no npm install!
    pause
    exit /b
)
pause

echo === CRIANDO BANCO DE DADOS ===
start /wait cmd /c "php artisan migrate --force"
pause

:: === ABRINDO NOVOS TERMINAIS ===
echo.
echo ==== Abrindo terminais para servidor e frontend ====
start cmd /k "cd /d %cd% && php artisan serve"
start cmd /k "cd /d %cd% && npm run dev"

echo.
echo ==== CONFIGURANDO GIT ====
start /wait cmd /c "git config user.name %GIT_USER_NAME% && git config user.email %GIT_USER_EMAIL%"
echo configurado para "%GIT_USER_NAME%" "%GIT_USER_EMAIL%"
pause

echo.
echo ==== ABRINDO PROJETO ====
start "" "http://127.0.0.1:8000"
start /wait cmd /c "code ."

echo.
echo ==== Tudo pronto! Servidores em execução ====
exit /b