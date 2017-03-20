import java.applet.Applet;
import java.awt.*;

public class HW2 extends Applet {
	public void paint(Graphics g) {
		g.drawString("The red square:", 50, 25);
		g.setColor(Color.red);
		g.fillRect(50, 40, 50, 50);
		g.setColor(Color.black);
		g.drawString("The green circle:", 50, 110);
		g.setColor(Color.green);
		g.fillOval(50, 125, 50, 50);
	}
}