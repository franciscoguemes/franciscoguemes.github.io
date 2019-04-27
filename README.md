See the following examples of code:
	W3.CSS Navigation Bar --> Collapsing the Navigation Bar: https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_hide

	W3.CSS sidebar: https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_over

This project represents my personal website

I choose the following templates:
	Dark Portfolio:
		https://www.w3schools.com/w3css/tryw3css_templates_dark_portfolio.htm#
		https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_dark_portfolio&stacked=h

	CV:
		https://www.w3schools.com/w3css/tryw3css_templates_cv.htm		
		https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_cv&stacked=h

These templates are under the folder "originals"


All templates can be found at: https://www.w3schools.com/w3css/w3css_templates.asp

Other interesting templates:
	Black & White portfolio: https://www.w3schools.com/w3css/tryw3css_templates_bw_portfolio.htm
	Nature Portfolio: https://www.w3schools.com/w3css/tryw3css_templates_portfolio.htm
	People Portfolio: https://www.w3schools.com/w3css/tryw3css_templates_portfolio2.htm <-- See contact section -->
	Band: https://www.w3schools.com/w3css/tryw3css_templates_band.htm#
	Screen 50/50: https://www.w3schools.com/w3css/tryw3css_templates_fifty.htm#work


/***********************************************************************************/

To get autorefresh, at the project directory execute: 
	browser-sync start --server --files *.html *.css

/***********************************************************************************/
List all branches: 
	git branch -a

Before creating a new branch, pull the changes from upstream. Your master needs to be up to date. 
	git pull

Create the branch on your local machine and switch in this branch : 
	git checkout -b [name_of_your_new_branch]

Push the branch on git : 
	git push origin [name_of_your_new_branch]

/***********************************************************************************/
Resolutions:

	STANDARD resolutions:

		   0 -  600 : Small screens   -  w3-hide-small
		 601 -  993 : Medium screens  -  w3-hide-medium
		 994 -  inf : Big screens     -  w3-hide-large

	My customized resolutions:
		1080 x X -- Breakpoint. With a smaller width the CV is not shown properly

		   0 -  600 : Small screens   -  w3-hide-small
		 601 - 1079 : Medium screens  -  w3-hide-medium
		1080 - infi	: Big screens     -  w3-hide-large

/***********************************************************************************/
