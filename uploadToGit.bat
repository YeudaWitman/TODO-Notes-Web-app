set changeDescription=%1
set webURL = 

git config --global user.name "YeudaWitman"
git config --global user.email "yeudaww@gmail.com"

git init
git add *
git commit -m %changeDescription%
git remote add origin %webURL%
git push -u origin master


rem credentials

rem git config --set user.name 