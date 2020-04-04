# To update to latest wordpress

	git checkout master
	git pull wordpress master:master
	git fetch --tags wordpress
	git checkout production2
	git merge $TAG
	
	# Note: if the merge does not appear to be a fast forward,
	# we need to force the merge with the upstream tree.
	
	# To do this, use theirs and be happy with.
	git merge -X theirs $TAG

#Deploy

To deploy

	./deploy.sh
	
# Update the PHP version

Change the `composer.json` to the desired runtime
and then remember to run

    composer update
    

