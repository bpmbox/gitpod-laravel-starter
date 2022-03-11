.phony: image ecr-push ecs-migrate ecs-deploy run rebuild test

NAME = tree-web-app
APP_ENVIRONMENT ?= local
TASK_ENVIRONMENT ?= ${APP_ENVIRONMENT}
GIT_COMMIT = $(shell git rev-parse --short HEAD)
GIT_BRANCH = $(shell git rev-parse --abbrev-ref HEAD)
GIT_VERSION = $(GIT_BRANCH)-$(GIT_COMMIT)
VERSION ?= $(shell echo ${GIT_VERSION} | tr / _)

export AWS_ECR_REPO = 372785561596.dkr.ecr.ap-northeast-1.amazonaws.com/tree-web-app
export AWS_ECS_ENVIRONMENT = $(shell if [ "${APP_ENVIRONMENT}" = "prod" ]; then echo "prod"; else echo "preprod"; fi)
export AWS_ECS_CLUSTER ?= tree_${AWS_ECS_ENVIRONMENT}_ecs
export AWS_ECS_TASK = tree_${TASK_ENVIRONMENT}_web_app
export AWS_ECS_SERVICE = ${AWS_ECS_TASK}_service
export APP_IMAGE = ${AWS_ECR_REPO}:${VERSION}

clean:
	@find . -type f -name "*.py[c|o]" -delete
	@find . -type d -name "__pycache__" -exec rm -rf \{} +

image:
	@echo "Building ${APP_ENVIRONMENT} image..."
	@docker build . -t ${APP_IMAGE} \
	--build-arg APP_ENVIRONMENT=${APP_ENVIRONMENT} \
	--build-arg VERSION=${VERSION} \
	--label environment=${APP_ENVIRONMENT} \
	--label git_commit=${GIT_COMMIT}

ecr-push: image
	@$(shell aws ecr get-login --no-include-email)
	@docker push ${APP_IMAGE}

#gitcloon:
#    @(shell git clone https://miyataken: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@github.com/treelabs2/tree-mf.git  "/gdrive/MyDrive/sy33332-ra32p230131")

ecs-migrate:
ifeq ($(TASK_ENVIRONMENT), $(filter $(TASK_ENVIRONMENT), stage prod))
	@printf "Are you sure you want to run this in prod [y/N] " && read ans && [ "$${ans:-N}" = y ]
endif
	$(eval OVERRIDES = $(shell jq -nc "{containerOverrides: [{name: \"${AWS_ECS_TASK}\", command: [\"./scripts/ecs-migrate.sh\"], environment: [{name: \"APP_ENVIRONMENT\", value: \"${APP_ENVIRONMENT}\"}]}]} | @json"))
	@aws ecs run-task \
	--cluster ${AWS_ECS_CLUSTER} \
	--task-definition ${AWS_ECS_TASK} \
	--overrides ${OVERRIDES}
clasp:
	npm install -g @google/clasp && clasp login --no-localhost
ecs-deploy: ecr-push
	@./scripts/ecs-deploy.sh

run:
	@./scripts/run_local.sh
	cd ../github/demo/docker && docker-compose up

expo:
	cd ../github/demo/docker && docker-compose up

demo:
	cd ../github/demo/docker && docker-compose up --build

rebuild:
	@./scripts/rebuild.sh

test:
	@./scripts/run_tests.sh

seed:
	@./scripts/seed_test_data.sh

gentoken:
	@read -p "Enter Account Email: " email;\
	eval './scripts/generate_test_token.sh $$email'

createsuperuser:
	@./scripts/create_superuser.sh

bash:
	@./scripts/bash.sh

shell:
	@./scripts/shell.sh

aswins:
	@pip install awscli

serverless:
	serverless config credentials --provider aws --key AKIAVNS6AH76OAQWEGWO --secret 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

generate-mjml:
	# Make sure mjml is installed: `npm install -g mjml`
	mjml templates/auth/emails/login_code.mjml -o templates/auth/emails/login_code.html
	mjml templates/space/emails/invite.mjml -o templates/space/emails/invite.html
	mjml templates/user/emails/email_change_code.mjml -o templates/user/emails/email_change_code.html
