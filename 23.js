// Define a JavaScript object representing a person

let person = {
    firstName: "John",
    lastName: "Doe",
    age: 30,
    job: "Software Engineer",
    greet: function() {
        return `Hello, my name is ${this.firstName} ${this.lastName} and I am ${this.age} years old.`;
    }
};

// Access properties of the object
console.log(person.firstName); // Output: John
console.log(person.age);       // Output: 30

// Call the object's method
console.log(person.greet());   // Output: Hello, my name is John Doe and I am 30 years old.

// Modify object properties
person.age = 31;
console.log(person.age);       // Output: 31

// Add a new property
person.country = "USA";
console.log(person.country);   // Output: USA