# To update to latest wordpress

	git checkout master
	git pull wordpress master:master
	git pull --tags
	git checkout production
	git merge $TAG

#Deploy

To deploy

	./deploy.sh
