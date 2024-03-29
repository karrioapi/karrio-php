
if [[ "$*" == *shell* ]]; then
	docker run --network="host" --rm --interactive --tty --volume $PWD:/app composer bash
elif [[ "$*" == *gen:cli* ]]; then
	mkdir -p "./codegen"
	docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate \
		-i https://raw.githubusercontent.com/karrioapi/karrio/main/server/schemas/openapi.json \
		-g php \
		-o /local/codegen/php \
        --additional-properties=invokerPackage=Karrio \
        --additional-properties=packageName=Karrio \
        --additional-properties=ensureUniqueParams=true \
        --additional-properties=prependFormOrBodyParameters=true

else
    echo "Help: You can pass any the following commands to the server"
    echo "-----"
    echo "shell: run a php shell inside the container"
    echo "gen:cli: generate php client code"
fi