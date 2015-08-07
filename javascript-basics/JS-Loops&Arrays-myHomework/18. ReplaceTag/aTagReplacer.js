function replaceATag(value){

    var replOpenATag = value.replace(/<a/g, "[URL");
    var replCloseATag = replOpenATag.split("\</a>").join("[/URL]");
    console.log(replCloseATag);
}

replaceATag("\<ul>\n  <li>\n    <a href=http://softuni.bg>SoftUni</a>\n  </li>\n</ul>");