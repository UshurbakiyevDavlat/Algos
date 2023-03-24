function findMissingNumbers(len: number, arr: number[]) {

    /*
    1) По длине последовательности создаем массив и в каждой итерации сравниваем значения
    и если нет совпадения, то добавляем в массив.

    2) По оценку сложность алгоритма здесь, O(n) - линейная сложность, т.к. мы проходим по всем элементам хотя бы один раз.
       Насколько я узнал, можно было бы сделать O(1), сделав через математические уравнения, но я что-то не догоняю как это сделать верно

    P.S
    В тайп скрипте нет функции includes по умолчанию поэтому пришлось arr.indexOf(num) === -1) смотреть по индексу.
    В этой строчке (_, i) => i + 1) задаем ход последовательности.
    А метод filter дает нам проверить каждое число последовательности на совпадение.

    * */
    const except = Array.from({ length: len }, (_, i) => i + 1).filter((num) => arr.indexOf(num) === -1);

    except.forEach((i) => {
        console.log(i);
    });

}


findMissingNumbers(10, [1, 2, 3, 4, 7, 8, 9, 10]);