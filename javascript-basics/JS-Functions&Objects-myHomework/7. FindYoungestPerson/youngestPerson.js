var persons = [
    { firstname : 'George', lastname: 'Kolev', age: 32},
    { firstname : 'Bay', lastname: 'Ivan', age: 81},
    { firstname : 'Baba', lastname: 'Ginka', age: 40}];

function findYoungestPerson(person){
    var isBigger = Number.MAX_VALUE;
    var younger = "";
    person.forEach(function(age){
      if (age.age && age.age < isBigger){
          isBigger = age.age;
          younger = age.firstname + " " + age.lastname;
      }
    })
    console.log("The youngest person is %s", younger);
}

findYoungestPerson(persons);