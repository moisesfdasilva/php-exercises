<?php
  function valid_move($first_row, $first_column, $second_row, $second_column) {
    If (($checker_board[$first_row][$first_column] != "redchecker") &&
      ($checker_board[$second_row][$second_column] == "black")) {
      If(($second_row - $first_row == 1) && (($second_column - $first_column == 1) ||
      ($second_column - $first_column == -1))) {
        If((second_row == 7) && ($checker_board[$first_row][$first_column] == "white checker")) {
          $checker_board[$second_row] [$second_column] = "white king";
        } else {
          $checker_board[$second_row] [$second_column] =
          $checker_board[$first_row] [$first_column];
        }
        $checker_board[$first_row] [$first_column] = "black";
      }
    } else {
      If(($checker_board[$first_row] [$first_column] != "white checker") && 
        ($checker_board[$second_row] [$second_column] == "black")) {
        If(($second_row - $first_row == -1) && (($second_column - $first_column == 1) ||
        ($second_column - $first_column == -1))) {
          If(($second_row == 0) && ($checker_board[$first_row] [$first_column] == "red checker")) {
            $checker_board[$second_row][$second_column] = "red king";
          } else {
            $checker_board[$second_row] [$second_column] = $checker_board[$first_row] [$first_column];
          }
          $checker_board[$first_row] [$first_column] = "black";
        } // end if $second_column - $first_column == -1
      } // not white checker - if both if statements fail it is not a valid move
    }
    display_board();
  }
?>