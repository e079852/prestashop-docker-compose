# Prestashop on docker-compose

Based on  [PrestaShop/docker](https://github.com/PrestaShop/docker)

## What is this project
This is an installation of Prestashop with the Simplify plugin that has been preconfigured with a test product to run "out of the box." There are two versions of the installation: PrestashopSimplify-PROD will send transactions to the Production environment at www.simplify.com, while PrestashopSimplify-UAT will send transactions to the UAT environment at uat.simplify.com.
## How to use it

The only configuration needed is to add the appropriate API keys. To do so follow the instruction below:

Prestashop version 1.7.4.1
Simplify Commerce version 1.4.2

Username: joe.bloggs@asdf.com
Password: Password99

To bring up the docker image and configure the API keys:

1. Run docker-compose up
2. In a browser, go to the dashboard at http://localhost/admin8388earpn/
3. Login as joe.bloggs@asdf.com/Password99
4. In the left-hand pane, click on Modules/Modules & Services
5. In the list of installed plugsins click on Simplify Commerce/Configure
6. For Sandbox, click on the "Test Mode" checkbox and add your Test Public and Private keys. For Live payments, click on "Live Mode" is not checked and add your Live Public and Private keys.
7. Click on the "Save Settings" button.
8. Visit the store (http://localhost) to run transactions.

NB. In the UAT environment, the currency configured in your store must match the currency of the onboarded merchant at Simplify.com

## Troubleshooting

If you get the following error: 

"NOTE: You're missing your loopback alias. Runthe docker/simplify/bin/add_alias. You need that for mylocal to work"

run the script as described.
