Skip to content
 
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 @oscarg933 Sign out
You are over your private repository plan limit (4 of 0). Please upgrade your plan, make private repositories public, or remove private repositories so that you are within your plan limit.
Your private repositories have been locked until this is resolved. Thanks for understanding. You can contact support with any questions.
82
193 307 Azure/azure-devtestlab
 Code  Issues 19  Pull requests 9  Projects 0  Wiki  Insights
Azure DevTestLab artifacts, scripts and samples
 845 commits
 63 branches
 0 releases
 67 contributors
 MIT
 PowerShell 93.8%	 Shell 2.5%	 JavaScript 1.8%	 C# 1.4%	 Other 0.5%
 @leovms
leovms Updating textual references to Azure DevOps (#423)  …
Latest commit 820b265  4 days ago
Type	Name	Latest commit message	Commit time
ARMTemplates	Fixing Environments URL	a year ago
Artifacts	Updating textual references to Azure DevOps (#423)	4 days ago
Documentation	Updating textual references to Azure DevOps (#423)	4 days ago
Environments	Incorrect uri for Service Fabric (#420)	a month ago
Samples	Update sample's api versions	3 months ago
Scripts	Removed references to obsolete Find-AzureRmResource cmdlet (#414)	2 months ago
SdkSamples	Update SdkSample nuget refs	2 years ago
Tests/RunAllTemplates	Update all templates to version 2016-05-15.	3 years ago
VstsTasks	Incremented extension version for publishing. (#419)	a month ago
schemas	Wait for shutdown in sysprep and deprovision artifacts.	2 years ago
.gitignore	Clean up .gitignore and remove tracked, ignored files (#389)	5 months ago
LICENSE.txt	add license file	3 years ago
README.md	Fix broken artifact icons (#173)	2 years ago
 README.md
Azure DevTest Labs Community
This is a public, community-contributed repository that contains:

Artifacts for Azure DevTest Labs: These artifacts can be deployed onto VMs in Azure DevTest Labs in the new Azure portal.

Azure Resource Manager Quickstart Templates for Azure DevTest Labs: These templates help with creation and deployment of resources related to Azure DevTest Labs (e.g. Labs, VMs and VM templates etc).

Open Source Code of Conduct: This project has adopted the Microsoft Open Source Code of Conduct. For more information see the Code of Conduct FAQ or contact opencode@microsoft.com with any additional questions or comments.

Artifacts Authoring:
Please see the document 'AUTHORING' in the Documentation folder for details.
Contributions guidelines:

Every artifact should be contained in its own folder under the Artifacts folder.

The artifact definition file should be named Artifactfile.json. The name of the artifact that shows up in Azure DevTest Labs is from the title field in the artifact definition.

All dependencies of the artifact (such as scripts, icons etc) should be included in the artifact folder itself.

All references to icons must use SSL, otherwise they will not load in the Azure portal.

It is highly recommended that a Readme.md file be included to explain how the artifact works and how to troubleshoot any failures.

For authors who create the artifact and take responsibility of maintaining it, it is encouraged to add your name in the "publisher" field while authoring artifacts.

Azure Resource Manager Quickstart Templates
The latest, developer versions of the Azure Resource Manager Quickstart Templates for Azure DevTest Labs can be found in the 'ARMTemplates' folder of this repo.
Miscellaneous
Some useful scripts, related to Azure DevTest labs can be found in the 'scripts' folder.

© 2018 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
Press h to open a hovercard with more details.
