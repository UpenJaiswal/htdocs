import styled from 'styled-components';




export const ButtonContainer = styled.button`
text-transform: capitalize;
font-size: 1.4rem;
background: #FCC201;
border: 0.05rem solid var(--mainDark);
border-color:${props => props.cart? "var(--mainYellow)" : "var(--lightBlue)"};
color: ${props => props.cart? "Black" : "Black"};
border-radius: 10px;
padding: 0.2rem 0.5rem;
cursor: pointer;
margin: 0.2rem 0.5rem 0.2rem 0;
transition: 0.5s ease-in-out;
&:hover {
  background: ${prop =>
  prop.cart ? "var(--mainYellow)" : "Blue"};
  color: black;
}
&:focus {
  outline: none;
}
`;
