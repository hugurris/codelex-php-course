<?php declare(strict_types=1);

$combos = [
    [[0, 0], [1, 0], [2, 0]],
    [[0, 1], [1, 1], [2, 1]],
    [[0, 2], [1, 2], [2, 2]],
    // ^ Winning for columns
    [[0, 0], [0, 1], [0, 2]],
    [[1, 0], [1, 1], [1, 2]],
    [[2, 0], [2, 1], [2, 2]],
    // ^ Winning for rows
    [[0, 0], [1, 1], [2, 2]],
    [[0, 2], [1, 1], [2, 0]],
    // ^ Winnings for diagonals


];
echo "Do you want start simple Tic-Tac-Toe game? \n";

Do {

    $input = readline("[YES: 1 / NO: 0] > ");

    if ($input == 1) {
        echo "\nGood choice Samiiiir! Let the game begin! Have fun!\n";
    } elseif ($input == 0) {
        echo "Ohh well, you disappointed me Samiiir! You nafti nafti boy, see you next time! \n";
        break;
    } elseif ($input !== 1 || $input !== 0) {
        echo "Samiiiir! Wrong choice, you tear the game! Please try again!\n";
        break;
    }

    function display_board() {
        echo "      Tic Tac Toe\n";
        echo "        Columns  \n";
        echo "       0   1   2 \n";
        echo "Row 0    |   |   \n";
        echo "      ---+---+---\n";
        echo "Row 1    |   |   \n";
        echo "      ---+---+---\n";
        echo "Row 2    |   |   \n";
    }


    display_board();


} while ($input !== 1 && $input !== 0);

?>
