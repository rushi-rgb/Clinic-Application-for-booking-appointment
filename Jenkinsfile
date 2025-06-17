pipeline {
    agent any

    stages {
        stage('Build Docker Image') {
            steps {
                sh 'docker build -t rushi-rgb/clinic-app .'
            }
        }

        stage('Run Docker Container') {
            steps {
                sh '''
                docker stop clinic-app || true
                docker rm clinic-app || true
                docker run -d --name clinic-app -p 8000:80 rushi-rgb/clinic-app
                '''
            }
        }
    }
}
