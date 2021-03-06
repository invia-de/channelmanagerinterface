pipeline {
  agent any

  stages {

    stage('Test Project') {
      parallel {
        stage('Run phpunit') {
          agent {
            docker { image 'php:7.2-alpine' }
          }
          steps {
            sh """
              apk add --no-cache \${PHPIZE_DEPS} libzip-dev
              pecl install zip --with-libzip
              docker-php-ext-enable zip
              pecl install xdebug
              docker-php-ext-enable xdebug
              php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
              php composer-setup.php --install-dir=/usr/local/bin --filename=composer --version=1.7.3
              composer install --no-progress --no-interaction --optimize-autoloader --no-scripts
              php vendor/bin/simple-phpunit --testsuite default --colors=never --log-junit build/junit.xml --coverage-clover build/clover.xml
            """
          }
        }
      }
    }

    stage('Publish') {
      environment {
        PROJECT = 'invia.interface.channel-manager'
      }
      parallel {
        stage('SonarQube') {
          stages {
            stage('master') {
              agent any
              when {
                branch 'master'
              }
              steps {
                script {
                  SONAR_SCANNER_HOME = tool 'sonar'
                  GIT_COMMIT_SHORT = sh(returnStdout: true, script: "git log -n 1 --pretty=format:'%h'").trim()
                }
                withSonarQubeEnv('sonar') {
                  sh "${SONAR_SCANNER_HOME}/bin/sonar-scanner -Dsonar.projectVersion='${GIT_COMMIT_SHORT}' -Dsonar.projectName='${PROJECT}/master' -Dsonar.projectKey='${PROJECT}:master'"
                }
              }
            }
            stage('develop') {
              agent any
              when {
                branch 'develop'
              }
              steps {
                script {
                  SONAR_SCANNER_HOME = tool 'sonar'
                  GIT_COMMIT_SHORT = sh(returnStdout: true, script: "git log -n 1 --pretty=format:'%h'").trim()
                }
                withSonarQubeEnv('sonar') {
                  sh "${SONAR_SCANNER_HOME}/bin/sonar-scanner -Dsonar.projectVersion='${GIT_COMMIT_SHORT}' -Dsonar.projectName='${PROJECT}/develop' -Dsonar.projectKey='${PROJECT}:develop'"
                }
              }
            }
            stage('branch') {
              agent any
              when {
                expression { BRANCH_NAME ==~ /feature.*/ }
              }
              steps {
                script {
                  SONAR_SCANNER_HOME = tool 'sonar'
                  GIT_COMMIT_SHORT = sh(returnStdout: true, script: "git log -n 1 --pretty=format:'%h'").trim()
                }
                withSonarQubeEnv('sonar') {
                  sh "${SONAR_SCANNER_HOME}/bin/sonar-scanner -Dsonar.projectVersion='${GIT_COMMIT_SHORT}' -Dsonar.projectName='${PROJECT}/branch' -Dsonar.projectKey='${PROJECT}:branch'"
                }
              }
            }
          }
        }
      }
    }
  }
}
