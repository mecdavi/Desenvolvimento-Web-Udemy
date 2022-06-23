function rot13(str) {
    let tam;
    let ind = '';                
    var alfabet = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

    for(i = 0;i<str.length;i++){
        tam = alfabet.indexOf(str.charAt(i))+13;
        tam >= alfabet.length ? tam = tam - alfabet.length : '';
        alfabet.indexOf(str.charAt(i)) == -1  ? ind += str.charAt(i) : ind += alfabet[tam];
    }
    return str;
}

rot13("SERR CVMMN!");