$("#new_pass").click(function (){
    $('#password').val(generatePassword(10));
});
function generatePassword(length) {
    var  charset = "abcdefghjkmnpqrtuvwxyzABCDEFGHJKMNPQRTUVWXYZ2346789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    return retVal;
}
