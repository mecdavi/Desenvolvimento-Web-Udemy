function rot13(str) {
    str = str.toUpperCase()
    str = str.replace(/ /g,'')
    str = str.match(/[a-z 0-9]/gi)
    let str1 = [...str]
    console.log(str,str1.reverse())
    console.log(str.join() === str1.reverse().join() ? true:false)
    return 
}

    rot13("My age is 0, 0 si ega ym.");