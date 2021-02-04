<?phpclass Util{

static $DB_NAME = "login";
static $DB_USER = "root";
static $DB_PASSWORD = "";
static $DB_SERVER = "localhost";
$db = mysqli_connect($DB_NAME, $DB_USER, $DB_PASSWORD, $DB_SERVER);

}
?>