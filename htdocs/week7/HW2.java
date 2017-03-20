import java.applet.Applet;
import java.awt.*;

public class HW2 extends Applet {
	public void paint(Graphics g) {
		g.drawString("The red square:", 25, 25);
		g.setColor(Color.red);
		g.fillRect(25, 50, 50, 50);
		g.setColor(Color.black);
		g.drawString("The green circle:", 25, 125);
		g.setColor(Color.green);
		g.fillOval(25, 150, 50, 50);
	}
}