#!/bin/sh
WEB_HOME="/home/path/to/web/dir"
GIT_PATH="git@github.com:some-git-repo.git"
GIT_REPO_HOME="/home/web_project/git_repo"

ENVIRONMENT="staging"

TIMESTAMP=`date +%Y%m%d_%H%M%S`

cd $GIT_REPO_HOME                               # change directory to git_repo
rm -rf sitename.com                             # remove old git files without interaction, change to the name of the git repo name

#git clone $GIT_PATH
#mkdir $TIMESTAMP                              # make a directory for our current theme files to go into


#cd $WEB_HOME

#cp -a . $GIT_CI_HOME/$TIMESTAMP               # copy files in current directory ( should be in theme directory )

#rm -rf .                                      # remove all the old theme files

#cp -a $GIT_CI_HOME/destination/of/files/. $WEB_HOME            # copy new files over to the theme directory
