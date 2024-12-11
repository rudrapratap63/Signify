// function converttohindi(hindidata)
// {
// 	allwords = hindidata.trim().split(" ");
// 	rurl = "https://www.google.com/inputtools/request?text="+allwords+"&ime=transliteration_en_hi&num=5&cp=0&cs=0&ie=utf-8&oe=utf-8&app=jsapi";
// 	$.get(rurl, function(data, status){		
//         console.log(data);
//     });
// }

// async function converttohindi(hindidata) {
//     console.log("convertToHind function working");
    
//     const allwords = hindidata.trim().split(" ");

// 	console.log(allwords)
    
//     for (const word of allwords) {
//         rurl = "https://www.google.com/inputtools/request?text="+allwords+"&ime=transliteration_en_hi&num=5&cp=0&cs=0&ie=utf-8&oe=utf-8&app=jsapi";
	
//         try {
//             const response = await fetch(rurl);
//             if (!response.ok) {
//                 throw new Error(`HTTP error! status: ${response.status}`);
//             }
//             const data = await response.json();
//             console.log(data);
//         } catch (error) {
//             console.error('Error fetching data:', error);
//         }
//     }
// }

function converttohindi(hindidata)
{
	allwords = hindidata.trim().split(" ");
	rurl = "https://www.google.com/inputtools/request?text="+allwords+"&ime=transliteration_en_hi&num=5&cp=0&cs=0&ie=utf-8&oe=utf-8&app=jsapi";
	$.get(rurl, function(data, status){		
        console.log(data);
    });
}



// converttohindi("कैसे हो तुम");