//computationss

// 1411Research on life below water
// (x)(y) 
// x=no. of published research
// y= weight 
// Indexed in…
// SCOPUS/Web of Science25
// Other Peer Reviewed- 10 
// Max. is 25 points
function compute1411(){
  let x = document.getElementById('1411hiddenx').value;
  let y = document.getElementById('1411hiddeny').value;

  let score = Number(x) * (Number(y) / Number(x));
  if(score >= 25){
    score = 25;
    document.getElementById('1411score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1411score').innerHTML = "Score: " + score;
  }
  document.getElementById('1411tppa').innerHTML = "Total Research on life below water: " + x;

}

function calculateWeightedScore(x, y) {
  const weightSCOPUS = 25;
  const weightOtherPeerReviewed = 10;
  const maxScore = 25;

  // Determine the weight based on the type of indexing
  const weight = y === "SCOPUS/Web of Science" ? weightSCOPUS : weightOtherPeerReviewed;

  // Calculate the weighted score and ensure it doesn't exceed the maximum
  const weightedScore = Math.min(x * weight, maxScore);

  return weightedScore;
}

// Example usage:
const numberOfResearchPapers = 1411;
const indexingType = "SCOPUS/Web of Science";

const score = calculateWeightedScore(numberOfResearchPapers, indexingType);
console.log("Weighted Score:", score);


// 1421Fresh-water ecosystems(community outreach)
// 5 points 
// x/2 (5)
// x= no. of extension 
// educational programs on 
// freshwater ecosystems
function compute1421(){
  let x = document.getElementById('1421hidden').value;
  let score = parseInt(x) / 2;
  if(score >= 5){
    score = 5;
    document.getElementById('1421score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1421score').innerHTML = "Score: " + score;
  }
  document.getElementById('1421tppa').innerText = "Total PPAs About Fresh-water ecosystems(community outreach): " + x;
  // 1421tppa
}
// 1422Sustainable fisheries(community outreach)
// 5 points 
// x/2 (5)
// x= no. of extension
// educational programs on 
// sustainable fisheries
function compute1422(){
  let x = document.getElementById('1422hidden').value;
  let score = parseInt(x) / 2;
  if(score >= 5){
    score = 5;
    document.getElementById('1422score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1422score').innerHTML = "Score: " + score;
  }
  document.getElementById('1422tppa').innerText = "Total PPAs About Sustainable fisheries(community outreach): " + x;

}

// 1423Overfishing(community outreach)
// 5 points 
// x/2 (5)
// x= no. of extension 
// educational programs
// addressing overfishing
function compute1423(){
  let x = document.getElementById('1423hidden').value;
  let score = parseInt(x) / 2;
  if(score >= 5){
    score = 5;
    document.getElementById('1423score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1423score').innerHTML = "Score: " + score;
  }
  document.getElementById('1423tppa').innerText = "Total PPAs About Overfishing(community outreach): " + x;

}

// 1431Conservation and sustainable utilization of the oceans
// 5 points 
// x/2 (5)
// x= no. of PPAs that promote 
// conservation and 
// sustainable utilization of the 
// oceans
function compute1431(){
  let x = document.getElementById('1431hidden').value;
  let score = parseInt(x) / 2;
  if(score >= 5){
    score = 5;
    document.getElementById('1431score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1431score').innerHTML = "Score: " + score;
  }
  document.getElementById('1431tppa').innerText = "Total PPAs About Conservation and sustainable utilization of the oceans: " + x;

}

// 1432Food from aquatic ecosystems
// 5 points
// 1 point
// x/1
// x= no. of policy for 
// sustainable harvesting of 
// aquatic ecosystems. 
// Target is 1 policy only. 

// 4 points
// x/2 (4)
// x= no. of PPAs 
// implemented for the policy

function compute1432(){
  let x = document.getElementById('1432hiddenx').value;
  let y = document.getElementById('1432hiddeny').value;

  let comx = parseInt(x) / 1;
  let comy = parseInt(y) / 2;
  let score = comx + comy;

  if(score >= 5){
    score = 5;
    document.getElementById('1432score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1432score').innerHTML = "Score: " + score;
  }
  document.getElementById('1432tppa').innerText = "Total PPAs About Food from aquatic ecosystems: " + y;
  document.getElementById('1432tpolicy').innerText = "Total policy for sustainable harvesting of aquatic ecosystems: " + x;

}

// 1433maintain ecosystems and their biodiversity
// 5 points 
// x/2 (5)
// x= no. of PPAs aim to 
// maintain ecosystems and 
// biodiversity

function compute1433(){
  let x = document.getElementById('1433hidden').value;
  let score = parseInt(x) / 2;
  if(score >= 5){
    score = 5;
    document.getElementById('1433score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1433score').innerHTML = "Score: " + score;
  }
  document.getElementById('1433tppa').innerText = "Total PPAs About maintain ecosystems and their biodiversity: " + x;

}

// 1434Technologies towards aquatic ecosystem damange prevention
// 5 points 
// x/2 (5)
// x= no. of 
// technology/practices to 
// minimize damage to aquatic 
// ecosystem
function compute1434(){
  let x = document.getElementById('1434hidden').value;
  let score = parseInt(x) / 2;
  if(score >= 5){
    score = 5;
    document.getElementById('1434score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1434score').innerHTML = "Score: " + score;
  }
  document.getElementById('1434tppa').innerText = "Total PPAs About Technologies towards aquatic ecosystem damange prevention: " + x;

} 
// 1441Water discharge guidelines and standards
// 5 points 
// 1 point 
// Yes - 1
// No- 0

// 4 points 
// x/2 (4) 
// x= no. of PPAs for water 
// discharge guidelines and 
// standards
function compute1441(){
  let x = document.getElementById('1441hiddenx').value;
  let y = document.getElementById('1441hiddeny').value;

  let comx = parseInt(x);
  let comy = parseInt(y) / 2;
  let score = comx + comy;
  if(score >= 5){
    score = 5;
    document.getElementById('1441score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1441score').innerHTML = "Score: " + score;
  }
  document.getElementById('1441tppa').innerText = "Total PPAs About Water discharge guidelines and standards: " + y;


}

// 1442Action plan to reducing plastic waste
// 5 points 
// 1 point 
// Yes - 1
// No- 0
// 4 points 
// x/2 (4) 
// x= no. of PPAs for plastic 
// waste reduction plan
function compute1442(){
  let x = document.getElementById('1442hiddenx').value;
  let y = document.getElementById('1442hiddeny').value;

  let comx = parseInt(x);
  let comy = parseInt(y) / 2;
  let score = comx + comy;

  if(score >= 5){
    score = 5;
    document.getElementById('1442score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1442score').innerHTML = "Score: " + score;
  }
  document.getElementById('1442tppa').innerText = "Total PPAs About Action plan to reducing plastic waste: " + y;

}

// 1443Reducing marine pollution
// 5 points 
// 1 point 
// Yes - 1
// No- 0
// 4 points 
// x/2 (4) 
// x= no. of PPAs for reducing 
// marine pollution policy
function compute1443(){
  let x = document.getElementById('1443hiddenx').value;
  let y = document.getElementById('1443hiddeny').value;

  let comx = parseInt(x);
  let comy = parseInt(y) / 2;
  let score = comx + comy;

  if(score >= 5){
    score = 5;
    document.getElementById('1443score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1443score').innerHTML = "Score: " + score;
  }
  document.getElementById('1443tppa').innerText = "Total PPAs About Reducing marine pollution: " + y;

}

// 1451Minimizing alteration of aquatic ecosystems
// 5 points 
// 1 point 
// Yes - 1
// No- 0

// 4 points 
// x/2 (4) 
// x= no. of PPAs for 
// minimizing alteration of 
// aquatic ecosystems plan
function compute1451(){
  let x = document.getElementById('1451hiddenx').value;
  let y = document.getElementById('1451hiddeny').value;
  let comx = parseInt(x);
  let comy = parseInt(y) / 2;
  let score = comx + comy;

  if(score >= 5){
    score = 5;
    document.getElementById('1451score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1451score').innerHTML = "Score: " + score;
  }
  document.getElementById('1451tppa').innerText = "Total PPAs About Minimizing alteration of aquatic ecosystems: " + y;

}
// 1452Monitoring the health of aquatic ecosysystems
// 5 points 
// x/2 (5)
// x= no. of PPAs for 
// monitoring the health of 
// aquatic ecosystems


function compute1452(){
  let x = document.getElementById('1452hidden').value;
  let score = parseInt(x) / 2;
  if(score >= 5){
    score = 5;
    document.getElementById('1452score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1452score').innerHTML = "Score: " + score;
  }
  document.getElementById('1452tppa').innerText = "Total PPAs About Monitoring the health of aquatic ecosysystems: " + x;

} 
// 1453Programmes towards food aquatic stewardship practices
// 5 points 
// (5x)
// x = no of. programmes 
// Maximum of 5
function compute1453(){
  let x = document.getElementById('1453hidden').value;
  let score = parseInt(x) / 2;
  if(score >= 5){
    score = 5;
    document.getElementById('1453score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1453score').innerHTML = "Score: " + score;
  }
  document.getElementById('1453tppa').innerText = "Total PPAs About Programmes towards food aquatic stewardship practices: " + x;

}
// 1454
// Collaboration for shared .aquatic ecosystems
// 5 points 
// x/2 (5)
// x= no. of collaborations with 
// local community to maintain 
// shared aquatic ecosystems
function compute1454(){
  let x = document.getElementById('1454hidden').value;
  let score = parseInt(x) / 2;
  if(score >= 5){
    score = 5;
    document.getElementById('1454score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1454score').innerHTML = "Score: " + score;
  }
  document.getElementById('1454tppa').innerText = "Total PPAs About Collaboration for shared .aquatic ecosystems: " + x;

}
// 1455Watershed management strategy
// 5 points 
// 1 point 
// Yes - 1
// No- 0
// 4 points 
// x/2 (4) 
// x= no. of watershed 
// management strategies
function compute1455(){
  let x = document.getElementById('1455hiddenx').value;
  let y = document.getElementById('1455hiddeny').value;

  let comx = parseInt(x);
  let comy = parseInt(y) / 2;
  let score = comx + comy;

  if(score >= 5){
    score = 5;
    document.getElementById('1455score').innerHTML = "Score: " + score;
  }else{
    document.getElementById('1455score').innerHTML = "Score: " + score;
  }
  document.getElementById('1455tppa').innerText = "Total PPAs About Watershed management strategy: " + y;


}


//clean the system and database remove all computed fields
// male and female to db
// do 14.1.1 computation
// delete computed values in database and 
// fix all update, insert and select to get rid of computed values in the database



