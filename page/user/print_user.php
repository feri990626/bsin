<?php
include_once "../../config/koneksi.php";
?>

<html>
    <body>
        <table>
            <tr>
                <td>
                    test
                </td>
            </tr>
        </table>
    </body>
</html>

<?php
$html = ob_get_contents();
ob_end_clean();

require_once('../../assets/vendor/spipu/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P', 'A4', 'en');
$pdf->WriteHTML($html);
$pdf->Output('report_user.pdf', 'D');

?>