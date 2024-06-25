pipeline {
    agent any
    stages {
        stage("Verify tooling") {
            steps {
                bat '''
                    docker info
                    docker version
                    docker compose version
                '''
            }
        }
        stage("Clear all running docker containers") {
            steps {
                script {
                    try {
                        bat 'docker rm -f $(docker ps -a -q)'
                    } catch (Exception e) {
                        echo 'No running container to clear up...'
                    }
                }
            }
        }
        stage("Build Docker") {
            steps {
                bat 'docker build -t teamistry .'
                bat 'docker ps'
            }
        }
        stage("Populate .env file") {
            steps {
                bat '''
                    xcopy /S /Y "C:\\ProgramData\\Jenkins\\.jenkins\\workspace\\envs\\teamistry\\.env" "%WORKSPACE%"
                '''
            }
        }
        stage("Run Tests") {
            steps {
                dir('src'){
                    bat 'php artisan test'
                }
            }
        }
    }
    post {
        always {
            bat 'docker stop $(docker ps -a -q) && docker rm $(docker ps -a -q) && docker network prune -f && docker volume prune -f'
            bat 'docker ps'
        }
    }
}
