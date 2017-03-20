import java.applet.Applet;
import java.awt.*;
import java.awt.event.*;

public class HW5 extends Applet {
	int x, y, tmpx, tmpy;
	int diff_x, diff_y;
	int r;
	Color color;
	int drag;
	
	public void init() {
		String tmpstring;
		x = this.getSize().width/2;
		y = this.getSize().height/2;
		r = 50;
		drag = 0;

		color=Color.blue;
		this.addMouseListener(new MouseAdapter() {
			public void mousePressed(MouseEvent e) {
				tmpx = e.getX();
				tmpy = e.getY();
				diff_x = tmpx - x;
				diff_y = tmpy - y;
				if(tmpx > x -r/2 && tmpx < x+r/2 && tmpy > y-r/2 && tmpy < y+r/2)
					drag = 1;
			}
			public void mouseReleased(MouseEvent e) {
				drag = 0;
			}
		});
		
		this.addMouseMotionListener(new MouseAdapter() {
			public void mouseDragged(MouseEvent e) {
				if(drag == 1) {
					x = e.getX() - diff_x;
					y = e.getY() - diff_y;
					repaint();
				}
			}
		});
	}
	
	public void paint(Graphics g) {
		g.drawString("You can drag the square with the mouse:", 25, 25);
		g.setColor(color);
		g.fillRect(x-r/2, y-r/2, r, r);
	}
}