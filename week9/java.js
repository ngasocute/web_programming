class superClass {
    constructor() {
        this.bye = superBye;
        this.hello = superHello;
    }
}

class subClass {
    constructor() { this.bye = subBye; }
}
subClass.prototype = new superClass();
function superHello(){return "Hello";}
function superBye(){return "Bye";}
function subBye(){return"Sub Bye";}

var newClass = new subClass();
alert(newClass) = new subClass();
alert(newClass.bye());
alert(newClass.hello());

var person = {
    firstName: 'Nga',
    lastName: 'Nguyen',
    showName: function(){
        console.log(this.firstName + " " + this.lastName);
}
};

class Person {
    constructor(firstName, lastName) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.showName = function () {
            console.log(this.firstName + " " + this.lastName);
        };
    }
}

var otherPerson = new Person("Nga1", "Nguyen");

class Person {
    constructor(_age, _name) {
        this.age = _age;
        this.name = _name;
    }
}

Person.prototype.height = 0;

var cute_person = new Person (22, "Nga");
for (var att in cute_person){
    console.log(att);
}