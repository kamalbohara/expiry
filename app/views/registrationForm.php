<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 8:46 PM
 */

use app\helpers\LoginHelper;

$loginObj = new LoginHelper();
if (!$loginObj->checkLogin()) {
    ?>
    <form action="app/controllers/register.php" method="post" name="registration">
        <table width="100%">
            <tr>
                <td colspan="2">
                    <h2>Registration</h2>
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
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Register"/>
                </td>
            </tr>
        </table>
    </form>
    <?php
}
else
{
?>
    <a href="<?php echo SITE_URL;?>app/controllers/logout.php">Logout</a>
<?php
}
?>

