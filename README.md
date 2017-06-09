# To update to latest wordpress

	git checkout master
	git pull wordpress master:master
	git fetch --tags wordpress
	git checkout production
	git merge $TAG

#Deploy

To deploy

	./deploy.sh
