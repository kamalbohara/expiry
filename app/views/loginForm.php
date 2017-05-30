<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 8:46 PM
 */

use app\helpers\LoginHelper;

$loginObj = new LoginHelper();
if (!$loginObj->checkLogin() ) {
    ?>
    <form action="app/controllers/login.php" method="post" name="login">
        <table width="100%">
            <tr>
                <td colspan="2">
                    <h2>Login</h2>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" name="email" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="password" name="password" value="">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="left">
                    <input type="submit" name="submit" value="Login"/>
                </td>
            </tr>
        </table>
    </form>
    <?php
}
?>