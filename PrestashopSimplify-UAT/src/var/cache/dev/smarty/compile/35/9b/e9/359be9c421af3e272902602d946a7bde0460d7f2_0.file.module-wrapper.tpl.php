<?php
/* Smarty version 3.1.32, created on 2018-08-20 07:47:35
  from '/var/www/html/modules/simplifycommerce/views/templates/hook/module-wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7aaa57c178c8_56596370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '359be9c421af3e272902602d946a7bde0460d7f2' => 
    array (
      0 => '/var/www/html/modules/simplifycommerce/views/templates/hook/module-wrapper.tpl',
      1 => 1534765635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7aaa57c178c8_56596370 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value ));?>
views/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value ));?>
views/css/spectrum.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value ));?>
views/js/spectrum.js"><?php echo '</script'; ?>
>

<div class="simplify-module-wrapper">
    <div class="simplify-module-header">
        <a href="https://www.simplify.com/" target="_blank" class="left">
            <img class="logo" src="//www.simplify.com/commerce/static/images/app-logo-pos.png"
                 alt="Simplify Commerce Logo" width="150" height="64"></a>

        <div class="header-title left">
            <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Start accepting payments now.','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h1>

            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It’s that simple.','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h2>
        </div>
        <a href="https://www.simplify.com/commerce/partners/prestashop#/" target="_blank" class="btn right"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for free','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</span></a>
    </div>
    <div class="section">
        <div class="clearfix">
            <div class="marketing left">
                <div class="w-container features item">
                    <img class="features item icon" src="//www.simplify.com/commerce/static/images/feature_signup.jpg"
                         alt="feature_signup.jpg">

                    <h1 class="features item h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Easy sign up','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h1>

                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click the "Sign up for free" button and become a Simplify merchant for free.','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
            <div class="marketing left">
                <div class="w-container features item">
                    <img class="features item icon" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value ));?>
views/img/feature_price.jpg"
                         alt="feature_signup.jpg">

                    <h1 class="features item h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Simple pricing','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h1>

                    <p>
                        No setup fees.
                        <br>No refund costs.
                        <br>No monthly service fees.*
                        <br>
                        <br>
                        <span class="simplify-features-footnote">* Subject to $10 minimum monthly processing fee.</span>

                </div>
            </div>
            <div class="marketing left">
                <div class="w-container features item">
                    <img class="features item icon" src="//www.simplify.com/commerce/static/images/feature_funding.jpg"
                         alt="feature_signup.jpg">

                    <h1 class="features item h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Two-day funding','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h1>

                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deposits are made into your account in two business days for most transactions.','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="w-container admin-description-block">
                <b>Simplify Commerce</b>, built my MasterCard, a global leader in the payment industry, makes it easy for small businesses to accept online payments.
                From our hosted ‘Pay Now’ solution that allows merchants to share links socially to our mobile point of sale to recurring payment solutions, we include must-have features key to businesses.
                <ul>
                    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Omni-channel payment solution for website, mobile and eCommerce store','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</li>
                    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accepting major card brands','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</li>
                    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick two-day funding','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</li>
                    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Highest Level 1 PCI certification','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</li>
                    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Simple eInvoicing','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</li>
                    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recurring billing for monthly subscriptions','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="formContainer">
        <section class="technical-checks">
            <?php if ($_smarty_tpl->tpl_vars['requirements']->value['result']) {?>
            <div class="conf">
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Good news! Everything looks to be in order, start accepting credit card payments now.','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h3>
            </div>
            <?php } else { ?>
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unfortunately, at least one issue is preventing you from using Simplify Commerce. Please fix the issue and reload this page.','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h3>

                <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Technical Checks','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h2>

                <table cellspacing="0" cellpadding="0" class="simplify-technical">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requirements']->value, 'requirement', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['requirement']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['k']->value != 'result') {?>
                            <tr>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['requirement']->value['result']) {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['ok_icon_link']->value;?>
" alt="ok"/>
                                    <?php } else { ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['nok_icon_link']->value;?>
" alt="not ok"/>
                                    <?php }?>
                                </td>
                                <td class="simplify-require-text">
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requirement']->value['name'],'htmlall','UTF-8' ));?>
<br/>
                                    <?php if (!$_smarty_tpl->tpl_vars['requirement']->value['result'] && isset($_smarty_tpl->tpl_vars['requirement']->value['resolution'])) {?>
                                        <?php echo Tools::safeOutput(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requirement']->value['resolution'],'htmlall','UTF-8' )),true);?>

                                        <br/>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            <?php }?>
        </section>
        <br/>
        <form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['request_uri']->value,'UTF-8' ));?>
" method="post">
            <section class="simplify-settings">
                <h2>API Key Mode</h2>

                <div class="half container">
                    <div class="keyModeContainer">
                        <input class="radioInput" type="radio" name="simplify_mode" value="0"
                                <?php if (!$_smarty_tpl->tpl_vars['simplify_mode']->value) {?>
                                    checked="checked"
                                <?php }?>
                                /><span>Test Mode</span>
                        <input class="radioInput" type="radio" name="simplify_mode" value="1"
                                <?php if ($_smarty_tpl->tpl_vars['simplify_mode']->value) {?>
                                    checked="checked"
                                <?php }?>
                                /><span>Live Mode</span>
                    </div>
                    <p>

                    <div class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test Mode','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</div>
                    All transactions in test mode are test payments. You can test your installation using card numbers
                    from our
                    <a href="https://www.simplify.com/commerce/docs/tutorial/index#testing" target="_blank">list of test
                        card numbers</a>.
                    You cannot process real payments in test mode, so all other card numbers will be declined.</p>
                    <p>

                    <div class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live Mode','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</div>
                    All transactions made in live mode are real payments and will be processed accordingly.</p>
                </div>
                <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set Your API Keys','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h2>

                <div class="account-mode container">
                    <p>If you have not already done so, you can create an account by clicking the 'Sign up for free'
                        button in the top right corner.<br/>
                        Obtain both your private and public API Keys from: Account Settings -> API Keys and supply them
                        below.</p>
                </div>
                <div class="clearfix api-key-container">
                    <div class="clearfix api-key-title">
                        <div class="left"><h4 class="ng-binding"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h4></div>
                    </div>
                    <div class="api-keys">
                        <div class="api-key-header clearfix">
                            <div class="left api-key-key"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Private Key','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</div>
                            <div class="left api-key-key"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Public Key','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</div>
                        </div>
                        <div class="api-key-box clearfix">
                            <div class="left api-key-key api-key ng-binding"><input type="password"
                                                                                    name="simplify_private_key_test"
                                                                                    value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['private_key_test']->value,'htmlall','UTF-8' ));?>
"/>
                            </div>
                            <div class="left api-key-key api-key ng-binding"><input type="text"
                                                                                    name="simplify_public_key_test"
                                                                                    value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['public_key_test']->value,'htmlall','UTF-8' ));?>
"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix api-key-container">
                    <div class="clearfix api-key-title">
                        <div class="left"><h4 class="ng-binding"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h4></div>
                    </div>
                    <div class="api-keys">
                        <div class="api-key-header clearfix">
                            <div class="left api-key-key"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Private Key','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</div>
                            <div class="left api-key-key"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Public Key','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</div>
                        </div>
                        <div class="api-key-box clearfix">
                            <div class="left api-key-key api-key ng-binding"><input type="password"
                                                                                    name="simplify_private_key_live"
                                                                                    value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['private_key_live']->value,'htmlall','UTF-8' ));?>
"/>
                            </div>
                            <div class="left api-key-key api-key ng-binding"><input type="text"
                                                                                    name="simplify_public_key_live"
                                                                                    value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['public_key_live']->value,'htmlall','UTF-8' ));?>
"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="left half">
                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save Customer Details','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h2>

                        <div class="account-mode container">
                            <p>Enable customers to save their card details securely on Simplify's servers for future
                                transactions.</p>

                            <div class="saveCustomerDetailsContainer">
                                <input class="radioInput" type="radio" name="simplify_save_customer_details" value="1"
                                        <?php if ($_smarty_tpl->tpl_vars['save_customer_details']->value == 1) {?>
                                            checked="checked"
                                        <?php }?>
                                        /><span>Yes</span>
                                <input class="radioInput" type="radio" name="simplify_save_customer_details" value="0"
                                        <?php if ($_smarty_tpl->tpl_vars['save_customer_details']->value == 0) {?>
                                            checked="checked"
                                        <?php }?>
                                        /><span>No</span>
                            </div>
                        </div>
                    </div>
                    <div class="half container left">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statuses_options']->value, 'status_options');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['status_options']->value) {
?>
                            <h2><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['status_options']->value['label'],'htmlall','UTF-8' ));?>
</h2>
                            <p>Choose the status for an order once the payment has been successfully processed by
                                Simplify.</p>
                            <div>
                                <select name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['status_options']->value['name'],'htmlall','UTF-8' ));?>
">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statuses']->value, 'status');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
?>
                                        <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['status']->value['id_order_state'],'htmlall','UTF-8' ));?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['status']->value['id_order_state'] == $_smarty_tpl->tpl_vars['status_options']->value['current_value']) {?>
                                                    selected="selected"
                                                <?php }?>
                                                ><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['status']->value['name'],'htmlall','UTF-8' ));?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="left">
                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Mode','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
</h2>

                        <div class="container">
                            <table>
                                <tr>
                                    <td>
                                        <select id="simplify_payment_mode" name="simplify_payment_mode">
                                            <option value="hosted_payments"
                                                    <?php if ($_smarty_tpl->tpl_vars['payment_mode']->value == 'hosted_payment') {?>selected="selected"<?php }?>>
                                                Hosted Payments
                                            </option>
                                            <option value="standard"
                                                    <?php if ($_smarty_tpl->tpl_vars['payment_mode']->value == 'standard') {?>selected="selected"<?php }?>>Standard
                                            </option>
                                        </select>
                                    </td>
                                    <td id="modal-overlay-config">
                                        <label for="modal-overlay-color" class="modal-overlay">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hosted payments button color','mod'=>'simplifycommerce'),$_smarty_tpl ) );?>
:</label>
                                                <input
                                                        name="simplify_overlay_color"
                                                        type="text"
                                                        id="modal-overlay-color"
                                                        size="8"
                                                        value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['overlay_color']->value,'htmlall','UTF-8' ));?>
"/>
                                                <input
                                                        id="colorSelector" type="text"
                                                        value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['overlay_color']->value,'htmlall','UTF-8' ));?>
"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="hp-notes" colspan="2">
                                        To use hosted payments you must create a new API Key pair with the <b>'Enable hosted payments'</b> option selected.<br/>
                                        For more information, please visit this <a target="_new" href="https://www.simplify.com/commerce/docs/tools/hosted-payments">link</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="clearfix"><input type="submit" class="settings-btn btn right" name="SubmitSimplify"
                                             value="Save Settings"/></div>
    </div>
    </section>
    </form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        var $modalOverlayColor = $('#modal-overlay-color');
        var $colorSelector = $("#colorSelector");
        var $modalOverlayConfig = $('#modal-overlay-config');
        var $simplifyPaymentMode = $('#simplify_payment_mode');

        function updateSimplifySettings() {
            enableOrDisableOverlaySetting();
        }

        function enableOrDisableOverlaySetting() {
            var disable = $simplifyPaymentMode.val() === 'standard';
            $modalOverlayConfig.css('opacity', disable ? 0.6 : 1.0);
            $colorSelector.spectrum(disable ? 'disable' : 'enable');
            if (disable) {
                $modalOverlayColor.attr('disabled', true);
            }
            else {
                $modalOverlayColor.removeAttr('disabled');
            }
        }

        $simplifyPaymentMode.change(enableOrDisableOverlaySetting);

        $('input:radio[name=simplify_mode]').click(updateSimplifySettings);

        function changeColor(color) {
            $modalOverlayColor.val(color.toHexString());
        }

        $colorSelector.spectrum({
            preferredFormat: "hex",
            showInput: true,
            move: changeColor,
            change: changeColor
        });

        $modalOverlayColor.change(function () {
            $colorSelector.spectrum('set', $(this).val());
        });

        updateSimplifySettings();
    });
<?php echo '</script'; ?>
>
<?php }
}
