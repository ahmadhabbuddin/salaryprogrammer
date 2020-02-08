function countVowels(text) {
	var vokal = 'aeiouAEIOU';
	var count = 0;

	for (var x = 0; x < text.length; x++) {
		if (vokal.indexOf(text[x]) !== -1) {
			count++;
		}
	}
	return count;
}

console.log(countVowels("aku Ahmad"))
console.log(countVowels("hmmm"))