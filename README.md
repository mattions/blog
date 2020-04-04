# To update to latest wordpress

	git checkout master
	git pull wordpress master:master
	git fetch --tags wordpress
	git checkout production2
	git merge $TAG

#Deploy

To deploy

	./deploy.sh
	
# Update the PHP version

Change the `composer.json` to the desired runtime
and then remember to run

    composer update
    

