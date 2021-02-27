data = jsondata[0];
var obj = {
    id : data.id,
    text : data.full_text.replace("\n",""),
    original_id : data.user.id,
    original_username : data.user.name,
    profile_creation_date : data.created_at,
    friends : data.user.friends_count,
    followers : data.user.followers_count,
    // "total_tweet_count" : data,
    verified : data.user.verified,
    location : data.user.location,
    language_of_tweet : data.lang,
}

function convertToCSV() {
    var column_heading = Object.keys(obj);
    var str = column_heading.join(",")+ "\n";
    column_heading.map(field => {
        str += obj[field] + ",";
    })
    console.log(str);
    return str;
}

function exportCSVFile(items) {
    var jsonObject = JSON.stringify(items);
    var csv = convertToCSV(jsonObject);
    var blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
    var link = document.createElement("a");
    if (link.download !== undefined) { // feature detection
        // Browsers that support HTML5 download attribute
        var url = URL.createObjectURL(blob);
        link.setAttribute("href", url);
        link.setAttribute("download", "export.csv");
        link.style.visibility = 'hidden';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
}
if(document.getElementById("csv_download")){
    document.getElementById("csv_download").addEventListener("click",function(){
        exportCSVFile();
    })
}