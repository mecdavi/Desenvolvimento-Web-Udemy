|s f c|
Transcript show: 'Enter a line: '.
s:=stdin nextLine.
f:=Bag new.
s do:[:ch | ch isLetter
    ifTrue:[ f add: ch asLowercase]
    ].
    1 to: 26 do:[:i |
        c:=(i+96)asCharacter.
        Transcript show:((f occurrencesOf:c) printString,'')
    ]