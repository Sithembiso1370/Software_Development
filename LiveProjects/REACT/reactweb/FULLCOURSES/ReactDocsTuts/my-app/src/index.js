import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';

function Square(props) {
    return (
      <button className="square" onClick={props.onClick}>
        {props.value}
      </button>
    );
  }

// class Square extends React.Component {
//     // First, we’ll add a constructor to the class to initialize the state:
//     // Delete the constructor from Square because Square no longer keeps track of the game’s state
//     // constructor(props){
//     //     // In JavaScript classes, you need to always call super when defining the constructor of a subclass. 
//     //     // All React component classes that have a constructor should start with a super(props) call.
//     //     super(props);

//     //     // SET THE STATE
//     //     this.state = { value : null,};
//     // }


//     render() {
//       return (
//         //   Replace the onClick={...} event handler with onClick={() => this.setState({value: 'X'})}
//         <button 
//             className="square" 
//             onClick={
//                 // Replace this.setState() with this.props.onClick() in Square’s render method
//                 ()=>{this.props.onClick()}
//         }>
//             {/* Replace this.props.value with this.state.value inside the <button> tag. */}
//             {/* Replace this.state.value with this.props.value in Square’s render method */}
//             {this.props.value}
//         </button>
//       );
//     }

//     // NOTES
//     // Notice how with onClick={() => console.log('click')}, we’re passing a function as the onClick prop. React will only call this function after a click. Forgetting () => and writing onClick={console.log('click')} 
//     // is a common mistake, and would fire every time the component re-renders.
// }
  
class Board extends React.Component {
    // Add a constructor to the Board and set the Board’s initial state to contain an array of 9 nulls corresponding to the 9 squares:
    constructor(props) {
        super(props);
        this.state = {
          squares: Array(9).fill(null),
          xIsNext: true,
        };
      }

    
    handleClick(i) {
        const squares = this.state.squares.slice();
        if (calculateWinner(squares) || squares[i]) {
            return;
          }
        squares[i] = this.state.xIsNext ? 'X':'O';
        this.setState({
            squares: squares,
            xIsNext: !this.state.xIsNext,
        });
    }

    // function within the board class that returns each square
    renderSquare(i) {
        // In Board’s renderSquare method, change the code to pass a prop/property called value to the Square:
        // We have already defined the squares array in the Board’s constructor, and we will modify the Board’s renderSquare method to read from it:
        return <Square value={this.state.squares[i]} 
        // we’ll pass down a function from the Board to the Square, and we’ll have Square call that function when a square is clicked
        onClick={()=>{ this.handleClick(i)}}
        />;
    }

    // Function within the board class the returns the board will all its inner squares
    render() {
        // const status = 'Next player: '+ (this.state.xIsNext ? 'X':'O');
        const winner = calculateWinner(this.state.squares);

        let status;
        if (winner) {
          status = 'Winner: ' + winner;
        } else {
          status = 'Next player: ' + (this.state.xIsNext ? 'X' : 'O');
        }

        

        return (
            // Board div
        <div>
            <div className="status">{status}</div>
            <div className="board-row">
                {this.renderSquare(0)}
                {this.renderSquare(1)}
                {this.renderSquare(2)}
            </div>
            <div className="board-row">
                {this.renderSquare(3)}
                {this.renderSquare(4)}
                {this.renderSquare(5)}
            </div>
            <div className="board-row">
                {this.renderSquare(6)}
                {this.renderSquare(7)}
                {this.renderSquare(8)}
            </div>
        </div>
        );
    }
}
  
class Game extends React.Component {
render() {
    return (
    <div className="game">
        <div className="game-board">
        <Board />
        </div>
        <div className="game-info">
        <div>{/* status */}</div>
        <ol>{/* TODO */}</ol>
        </div>
    </div>
    );
}
}
function calculateWinner(squares) {
    const lines = [
      [0, 1, 2],
      [3, 4, 5],
      [6, 7, 8],
      [0, 3, 6],
      [1, 4, 7],
      [2, 5, 8],
      [0, 4, 8],
      [2, 4, 6],
    ];
    for (let i = 0; i < lines.length; i++) {
      const [a, b, c] = lines[i];
      if (squares[a] && squares[a] === squares[b] && squares[a] === squares[c]) {
        return squares[a];
      }
    }
    return null;
  }
  // ========================================
  
  ReactDOM.render(
    <Game />,
    document.getElementById('root')
  );