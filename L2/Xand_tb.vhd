LIBRARY ieee;
USE ieee.std_logic_1164.ALL;
use ieee.numeric_std.all;
 
ENTITY Xand_tb IS
END Xand_tb;
 
ARCHITECTURE behavior OF Xand_tb IS 
	constant width : integer := 8;

    COMPONENT Xand
--generic(width	: integer:=8);
	port(	clk		: in std_logic;
			A,B		: in std_logic_vector(width-1 downto 0);
			C		: out std_logic_vector(width-1 downto 0)
		);
    END COMPONENT;
    
	signal clk : std_logic := '0';
	signal A,B : std_logic_vector(width-1 downto 0);
	signal Wynik : std_logic_vector(width-1 downto 0);
	signal C : std_logic_vector(width-1 downto 0);

	constant period : time := 10 ns;

BEGIN


END;
