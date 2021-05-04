pipeline {
    agent any
    
      stages {
        stage('Ophalen ISSUE_BRANCH') {
            steps {
                checkout([$class: 'GitSCM', branches: [[name: '*/Issue']], browser: [$class: 'GithubWeb', repoUrl: 'https://github.com/houdaifabediar/TestWebsite'], extensions: [], userRemoteConfigs: [[url: 'https://github.com/houdaifabediar/TestWebsite.git']]])
				
				echo 'ISSUE_BRANCH opgehaald'
            }
        }
		
		stage('Unit test') {
            steps {
                echo 'testen van de ISSUE_BRANCH met een Unit test-tool.'
            }
        }
		
		stage ('Bouw DEVELOP_BRANCH_1'){
            steps {
                echo 'Samenvoegen van ISSUE_BRANHC met DEVELOP_BRANCH.'
            }
        }
		
		stage ('Programatuur testen'){
            steps {
                echo 'Testen van de code mbv. van SonarQUBE & OwaspZAP'
            }
        }
		
		stage ('Bouw DEVELOP_BRANCH_2'){
            steps {
                echo 'MASTER_BRANCH samenvoegen met DEVELOP_BRANCH'
            }
        }
		
		stage ('TestDeployment'){
            steps {
                echo 'DEVELOP_BRANCH deployen op test_omgeving'
            }
        }
		
		stage ('Smoke test'){
            steps {
                echo 'Uitvoeren van de smoke test'
            }
        }
		
		stage ('Applicatie testen'){
            steps {
                echo 'De applicatie op de test-omgeving testen mbv. Regressietest & handmatige gebruikerstest?'
            }
        }
		
		stage ('Bouw MASTER_BRANCH'){
            steps {
                echo 'DEVELOP_BRANHC samenvoegen met de MASTER_BRANCH'
            }
        }
		
		stage ('Deployment Productie_omgeving'){
            steps {
                echo 'MASTER_BRANCH implementeren op PRO'
            }
        }
		
		stage ('Uitvoeren extra check (Indien nodig?!)'){
            steps {
                echo 'Extra checks uitvoeren indien de ontwikkelaar dit nodig vindt, zodat er 100% zekerheid is dat alles goed werkt'
            }
        }
		
    }
}
