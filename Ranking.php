<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 11/03/19
 * Time: 10:11
 */

class Ranking extends SplHeap
{

    /**
     * Compare elements in order to place them correctly in the heap while sifting up.
     * @link https://php.net/manual/en/splheap.compare.php
     * @param mixed $value1 <p>
     * The value of the first node being compared.
     * </p>
     * @param mixed $value2 <p>
     * The value of the second node being compared.
     * </p>
     * @return int Result of the comparison, positive integer if <i>value1</i> is greater than <i>value2</i>, 0 if they are equal, negative integer otherwise.
     * </p>
     * <p>
     * Having multiple elements with the same value in a Heap is not recommended. They will end up in an arbitrary relative position.
     * @since 5.3.0
     */
    protected function compare(Musica $musica1, Musica $musica2)
    {
        if($musica1->getVezesTocada() === $musica2->getVezesTocada()){
            return 0;
        }

        if($musica1->getVezesTocada() < $musica2->getVezesTocada()) {
            return -1;
        } else {
            return 1;
        }
    }
}