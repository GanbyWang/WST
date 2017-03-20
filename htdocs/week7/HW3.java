import java.applet.Applet;
import java.awt.*;

public class HW3 extends Applet {
	public void paint(Graphics g) {
		String shape = getParameter("shape");
		String color = getParameter("color");

		g.drawString("You wanna draw a " + color + " " + shape, 25, 25);

		if(color.equals("blue"))
			g.setColor(Color.blue);
		else if(color.equals("gray"))
			g.setColor(Color.gray);
		else if(color.equals("yellow"))
			g.setColor(Color.yellow);
		else
			g.setColor(Color.white);

		int[] x = {25, 75, 75};
		int[] y = {100, 50, 100};
		
		if(shape.equals("square"))
			g.fillRect(25, 50, 50, 50);
		else if (shape.equals("circle"))
			g.fillOval(25, 50, 50, 50);
		else if (shape.equals("triangle"))
			g.fillPolygon(x, y, 3);
	}
}