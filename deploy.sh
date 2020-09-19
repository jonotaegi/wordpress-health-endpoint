rsync -av ./ ../svn/trunk --exclude=.git --exclude=.gitignore --exclude=.idea --exclude=.svn --exclude=*.iml --exclude=assets --exclude=deploy.sh --delete
rsync -av ./assets/ ../svn/assets --exclude=.git --exclude=.svn --exclude=*.ai --delete
