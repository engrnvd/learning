<?php
$result = " ";

class MyCalculator
{
    public $a;
    public $b;

    public function Operation($operate)
    {
        switch ($operate) {
            case '+';
                return $this->a + $this->b;
                break;

            case '-';
                return $this->a - $this->b;
                break;

            case '*';
                return $this->a * $this->b;
                break;

            case '/';
                return $this->a / $this->b;
                break;

            default;
                return "Select any value";

        }
    }

    public function GetResult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->Operation($c);
    }
}

$cal = new MyCalculator();
if (isset($_POST['submit'])) {
    $result = $cal->GetResult($_POST['n1'], $_POST['n2'], $_POST['op']);
}
?>
<form method="post">
    <table align="center">
        <tr>
            <td><strong><?php echo $result; ?><strong></td>
        </tr>
        <tr>
            <td>Enter 1st Number</td>
            <td><input type="text" name="n1"></td>
        </tr>

        <tr>
            <td>Enter 2nd Number</td>
            <td><input type="text" name="n2"></td>
        </tr>

        <tr>
            <td>Select Oprator</td>
            <td><select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="                =                "></td>
        </tr>

    </table>
</form>
