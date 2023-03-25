// Сложность O(LogN) Решение бинарным поиском
function findMissingNumbers(len: number, arr: number[]) {
    let missing = [];
    let low = 0, high = arr.length - 1;

    while (low <= high) {
        let mid = Math.floor((low + high) / 2);
        let leftCount = arr[mid] - arr[low] - (mid - low);
        let rightCount = arr[high] - arr[mid] - (high - mid);

        if (leftCount > 0) {
            missing.push(...Array.from({length: leftCount}, (_, i) => arr[low] + i));
            low = mid + 1;
        } else if (rightCount > 0) {
            missing.push(...Array.from({length: rightCount}, (_, i) => arr[mid] + i));
            high = mid - 1;
        } else {
            low = mid + 1;
        }
    }

    const original = Array.from({length: len}, (_, i) => i + 1);
    missing.forEach((i) => console.log(original[i]));
}

findMissingNumbers(10, [1, 4, 5, 6, 7, 8, 9, 10]);
