Skip to content
 
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 @oscarg933 Sign out
You are over your private repository plan limit (4 of 0). Please upgrade your plan, make private repositories public, or remove private repositories so that you are within your plan limit.
Your private repositories have been locked until this is resolved. Thanks for understanding. You can contact support with any questions.
0
0 11 oscarg933/PyPlanet
forked from PyPlanet/PyPlanet
 Code  Issues 0  Pull requests 0  Projects 0  Wiki  Insights  Settings
 rocket PyPlanet is the next-gen Server Controller for ManiaPlanet (v4+). Using Python3 and AsyncIO. http://pypla.net/
 1,418 commits
 21 branches
 34 releases
 10 contributors
 GPL-3.0
 Python 99.4%	 Other 0.6%
 Pull request   Compare This branch is 6 commits ahead, 1 commit behind PyPlanet:master.
@oscarg933
oscarg933 Create Php.paymenta
Latest commit 2dfd2b6  a minute ago
Type	Name	Latest commit message	Commit time
.github	Update issue templates	7 days ago
apps	[FEATURE] Refactor settings, apps. Introduce advanced logging. Introd…	2 years ago
docs	Bump version: 0.6.2 → 0.6.3	21 days ago
pyplanet	Bump version: 0.6.2 → 0.6.3	21 days ago
tests	[TASK] Dedicated server update.	21 days ago
.appveyor.yml	[TASK] Add Python 3.7 to test suites.	2 months ago
.bumpversion.cfg	Bump version: 0.6.2 → 0.6.3	21 days ago
.coveragerc	[TASK] Make sure we coverage ignore the app and project templates.	a year ago
.editorconfig	[FEATURE] Add template commands 'init_app' and 'init_project' to crea…	2 years ago
.gitignore	[TASK] Update libraries, make pyplanet python 3.7.x compatible	4 months ago
.python-version	[TASK] Raise python version file.	5 months ago
.travis.yml	[TASK] Turn 3.7 travis on again.	2 months ago
CHANGELOG.rst	[BUGFIX] Fixing issue with default python config storage module.	21 days ago
Codecov.io.md.py.js.node	Create Codecov.io.md.py.js.node	7 days ago
LICENSE	[TASK] Add LICENSE file.	2 years ago
MANIFEST.in	[TASK] Update manifest.in to exclude new env dir	2 months ago
Makefile	[TASK] Use twine to upload wheel to pypi.	2 years ago
Php.paymenta	Create Php.paymenta	a minute ago
README.rst	[TASK] Update readme with new docker image name.	9 months ago
RELEASING.md	[TASK] Update releasing.md with new contents (using bumpversion)	9 months ago
Zipfiles	Create Zipfiles	11 hours ago
_config.yml	Set theme jekyll-theme-cayman	7 days ago
cli.py	[FEATURE] Implement the whole CLI framework + new start command.	2 years ago
codecov.yml	[TASK] Update codecov range.	9 months ago
pyplanet.py	[TASK] Solve problem with the release checker.	a year ago
requirements-dev.txt	[TASK] Upgrade libraries.	2 months ago
requirements.txt	[TASK] Upgrade requests library (Fixes PyPlanet#719)	21 days ago
setup.cfg	[TASK] Update links, names, github, badges etc. prepare for release.	2 years ago
setup.py	[TASK] Update links, names, github, badges etc. prepare for release.	2 years ago
tox.ini	[TASK] Turn 3.7 travis on again.	2 months ago
 README.rst
PyPlanet
https://travis-ci.org/PyPlanet/PyPlanet.svg?branch=master https://ci.appveyor.com/api/projects/status/glsug2u5crt2o66m/branch/master?svg=true https://coveralls.io/repos/github/PyPlanet/PyPlanet/badge.svg?branch=master Documentation Status       
This repo contains the PyPlanet package.

For installation, configuration and development instructions head towards our website: http://pypla.net/

Git Structure
Master is always the latest development environment. We develop features in different branches feature/* or bugfix/* appending with the issue key of GitHub.

Crafting releases is done at the release/1.1.x branches. The branch is created from the master at the moment the freeze moment goes in. Only bug fixes are accepted to be merged into the release/* or master branches (and merged into release again), name these branches bugfix/ISSUE-ID.

After releasing (from the release branch) it gets a version tag. From this point there is no way back, new bug releases will be crafted from the release branch (release/0.1.x for example).

Visualization of our current release schedule can be found here: Release Schedule

Versioning
All PyPlanet versions bellow 1.0.0 are not using semantic versioning. After 1.0.0, there is a strict semantic versioning (v2) versioning policy in use.

Contributions
Pull requests and issues are more then welcome. Please open a ticket before a pull request if you are not yet sure how to solve or want opinions before your implementation. (optional).

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
