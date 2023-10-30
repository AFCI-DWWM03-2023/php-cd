 <?php

class JeuEchecs {

    private $plateau = array(
        array('♜', '♞', '♝', '♛', '♚', '♝', '♞', '♜'),
        array('♟', '♟', '♟', '♟', '♟', '♟', '♟', '♟'),
        array('', '', '', '', '', '', '', ''),
        array('', '', '', '', '', '', '', ''),
        array('', '', '', '', '', '', '', ''),
        array('', '', '', '', '', '', '', ''),
        array('♙', '♙', '♙', '♙', '♙', '♙', '♙', '♙'),
        array('♖', '♘', '♗', '♕', '♔', '♗', '♘', '♖')
    );

    public function afficherPlateau() {
        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j < 8; $j++) {
                echo $this->plateau[$i][$j] . ' ';
            }
            echo "\n";
        }
    }

    public function deplacerPiece($xDepart, $yDepart, $xArrivee, $yArrivee) {
        $piece = $this->plateau[$xDepart][$yDepart];
        $this->plateau[$xDepart][$yDepart] = '';
        $this->plateau[$xArrivee][$yArrivee] = $piece;
    }

}

// Exemple d'utilisation :

$jeu = new JeuEchecs();
$jeu->afficherPlateau();

echo "Déplacer le pion de l'e2 à e4
";
$jeu->deplacerPiece(6, 4, 4, 4);
$jeu->afficherPlateau(); 



// class ChessGame {
//     private $board;
//     private $currentPlayer    public function __construct {
//         $this->board = array(
//             array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
//             array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
//             array('',  '',  '',  '',  '',  '',  '',  ''),
//             array('',  '',  '',  '',  '',  '',  '',  ''),
//             array('',  '',  '',  '',  '',  '',  '',  ''),
//             array('',  '',  '',  '',  '',  '',  '',  ''),
//             array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
//             array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
//         );

//         $this->currentPlayer = 'w';
//     }

//     public function movePiece($startPos, $endPos) {
//         $startRow = 8 - intval(substr($startPos, 1, 1));
//         $startCol = ord(substr($startPos, 0, 1)) - ord('a');
//         $endRow = 8 - intval(substr($endPos, 1, 1));
//         $endCol = ord(substr($endPos, 0, 1)) - ord('a');

//         $piece = $this->board[$startRow][$startCol];
//         $this->board[$startRow][$startCol] = '';
//         $this->board[$endRow][$endCol] = $piece;

//         $this->currentPlayer = ($this->currentPlayer === 'w') ? 'b' : 'w';
//     }

//     public function displayBoard() {
//         for ($row = 0; $row < 8; $row++) {
//             for ($col = 0; $col < 8; $col++) {
//                 echo $this->board[$row][$col] . ' ';
//             }
//             echo "\n";
//         }
//     }

//     public function getCurrentPlayer() {
//         return $this->currentPlayer;
//     }
// }

// // Exemple d'utilisation :

// $game = new ChessGame();
// $game->displayBoard();

// echo "Current player: " . $game->getCurrentPlayer() . "\n";

// $game->movePiece('e2', 'e4');
// echo "After moving e2 to e4:\n";
// $game->displayBoard();

// echo "Current player: " . $game->getCurrentPlayer() . "\n";

// $game->movePiece('e7', 'e5');
// echo "After moving e7 to e5:\n";
// $game->displayBoard();

// echo "Current player: " . $game->getCurrentPlayer() . "\n";
// ?>
// Ce code représente un jeu d'échecs simplifié avec une