<?php
require_once '../config/define.inc.php';


?>
<html>
<head>
    <title>
        Demo Expiry Project
    </title>
</head>
<body>
<table width="100%">
    <tr>
        <td>
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
        </td>
        <td width="30%">
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
        </td>
    </tr>
</table>

</body>
</html>