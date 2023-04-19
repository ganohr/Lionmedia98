@echo off
setlocal

for /f "delims=" %%a in (version.txt) do (
	set "version=%%a"
)

echo VERSION
echo %version%

set "outpath=.\trunk\%version%"
mkdir %outpath%\
mkdir %outpath%\css\
mkdir %outpath%\fonts\
mkdir %outpath%\img\

rem copy *.md %outpath%\
copy *.txt %outpath%\
copy *.css %outpath%\
copy *.php %outpath%\
copy css\*.css %outpath%\css\
copy img\*.* %outpath%\img\
del %outpath%\debug*.php
del %outpath%\version.txt

cd %outpath%

set "zipfile=..\..\release\lionmedia98-%version%.zip"
del %zipfile%

tar -a -c -f %zipfile% *

set "basefile=..\..\release\lionmedia98.zip"
del %basefile%

copy %zipfile% %basefile%

endlocal
pause
echo on
