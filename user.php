class User implements Account{
    //member variables

    protected $fullName;
    protected $email;
    protected $password;
    protected $profilePic;

    //getters and setters

    public function setEmail($email){
        $this->email =$email;
    }
    public function getEmail(){
        return this->$email
    }

    public function register ($pdo){
        //use the pdo to connect to db and regksster
    }
    public function login ($pdo){

    }
    public function changePassword ($pdo){

    }
    public function logout ($pdo){

    }
}