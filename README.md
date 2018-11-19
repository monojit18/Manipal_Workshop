# Manipal Hands-On Workshop
 
## Pre-requisites:

* Clone the repo: https://monojit18@github.com/monojit18/Manipal_Workshop.git
* You will get 4 projects - EasyPostsApp (.NET web api), EasyMobileApp (.NET web api), HelloWebSite (.NET MVC site),
AzureHelloPHP (Asiomple PHP app with phpunit test enabled)

*You can  igniore sfollwing 4 steps you already have the Azure portal setup done*

* Create a resource group (e.g. mplworkshopgroup) in the Azure portal
* Create an App service plan in the process (e.g. mplserviceplan)
* Create a Storage in the process (e.g. mplstorage)
* Select a region for the resource group (e.g. EastUS)

* Make sure you have VS for Windows installed
* For Mac OSX users, VSCode is a good option, as you would get publish option after connecitng to
Azure subscription all from within the VSCode IDE
* Install following plugins for VSCode -
    1. Azure Account
    2. Azure App Service
    3. Azure CLI tools
    4. Azure Repos
    5. PHP Debug
    6. PHP TDD
    7. PHP Intellisense
    8. PHPUnit
    9. Twig
    

*Azure DevOps steps - mandatory*

* Go to https://dev.azure.com
* Anyone of the team member create an account for your organization (e.g. mplDevOps)
* Add few Team members to it
* Others check the login and access
* Create a repository project for each of the above projects - You can name them as you would like!
* Create Azure Repos link for all of these
* Clone each empty project on your local machine

### Exercise 1:

1.	Go to Azure portal
2.	Create a new .NET based web API resource (e.g. QuickPostsApp)  – under the resource group created above (e.g. mplworkshopgroup)
3.	Note the Url
4.	Create a CosmosDB resource with Mongo API (e.g. mplcosmosmongodb)
5.	Note down the URL and Access Key from the QuickStart menu option
6.	Now create an empty Web API project in VS – named – QuickPostsApp – may be
7.	Implement GET and PUT methods which in-turn would call appropriate mongo APIs
8.	Publish the project from VS to Azure
9.	If you have mongo installed locally – please test it once before publishing
*Refer to EasyPostsApp in repo whenever you feel the need*

10. Publish the project from Visual Studio or VScode - your preferred IDE
11. Test the implemenattion in the cloud once.

*You can use skip cosmosdb/mongodb step and connect to any other database of your choice or just cerate a dummy API too.*
*Intent is to do DevOps, so actual project fun ctionality does not matter*

### Exercise 2:

1.	Go to Azure portal
2.	Create a new .NET based ASP.NET resource (e.g. MPLHelloWebSiteApp) – under the resource group created above (e.g. mplworkshopgroup)
3.	Note the Url
4.	Clone the HelloWebSite project from the repo link above
5.	Run locally by making some changes and check if it is running as expected
6.	Now create an empty Web API project in VS – named – QuickPostsApp – may be
7. You can leave it as-is at this stage as we would run throigh this in the DevOps excercise

### Exercise 3:

1. Go to Azure portal
2. Create a *Container Registry* instance - note all Access Key information
3. Open VScode and create a simple PHP project
*Refer to AzureHelloPHP in repo whenever you feel the need*
4. Add Dockerfile
5. From VSCode command line, execute Docker commands (build, push, run(optional)), using VSCode Docker extension
*Use the Access Key information obtained in step 2*
6. Go back to Azure portal again
7. Create a *Web App for Containers* and provide the Docker related information from *Container Registry* instance in step 2
8. This app now should be able to point to the latest Docker image from Azure Container registry


### Exercise 4:

*Following steps will be done in details duriong the workshop and discussed in-depth both for Standard deployment

1. Go back to Azure DevOps
2. Create a project for one of the .NET projects mentioend above, say, HelloWebSiteApp
3. Go to Repos and clone an empty repo somewhere on your local drive throigh VSCode or VS, as per uour choice
4. Put all the code from HelloWebSite folder into this new cloned repo folder.
*DO not copy the .git or .vs or such folders; expecially .git should be avoided as this will otherwise point to a different remote repo*

5. Open the project in VS now and build it locally
6. Go back to DevOps portal and select Build pipeline. Select **Azure Web App for ASP.NET** from templates
7. Define necessary params (e.g. Azure Account Authorization etc.). Also, go to trigger and check status (Enable CI if not done)
8. go to Release pipeline menu and define a new pipeline there.
9. Select Artifacts, go with the default ones only
10. Define CD from the connector icon with artifacts
11. Configure Release pipeline task, go with defaults only as the Build pipeline. Select **Azure Web App deployment** from templates
12. Come back to VSCode/VS and check-in all your changes; this should start a Build pipeline and a subsequent Relewase pipeline.
13. Once all done, move to Azure portal and check the deployment

### Exercise 5:

1. Take any PHP projects of uyour choice
2. Follow exactly the same steps as above for DevOps
3. Select YAML for deployment pipeline
4. https://docs.microsoft.com/en-us/azure/devops/pipelines/languages/php?view=vsts - for reference

### Special Notes

1. PHPUnit is included in the AzureHelloPHP projects including code coverage plugin
2. Run PHPUnit with phpunit <filename>.php
3. For all help on PHPUnit and code coverage - you can refer to the following links: 

https://phpunit.de/getting-started/phpunit-7.html
https://www.startutorial.com/articles/view/phpunit-beginner-part-1-get-started
http://codesamplez.com/development/phpunit-tutorial-beginners

https://hackernoon.com/generating-code-coverage-with-phpunite-and-phpdbg-4d20347ffb45
https://phpunit.de/manual/6.5/en/code-coverage-analysis.html
https://marketplace.visualstudio.com/items?itemName=jasonterando.vscode-php-tdd

