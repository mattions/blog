# To update to latest wordpress

	git checkout master
	git pull wordpress master:master
	git checkout production
	git merge master

#Deploy

To deploy

	./deploy.sh
